import React, { Component } from 'react';
import { connect } from 'react-redux';

import {
  closeModalUserAccess,
  changeSettings
} from '../../actions';

import BooleanSettingsField from '../../../Typology/Settings/BooleanSettingsField';
import UserAccessSettingsField from './../Settings/UserAccess/UserAccessSettingsField';


class ModalUserAccess extends Component {

  constructor(props) {
    super(props);

    // //console.log(" ModalEditClass :: construct ",props);

    this.onModalClose = this.onModalClose.bind(this);

    this.permissions = this.getPermissions();
    this.roles = this.getRoles();
  }

  getPermissions() {
    var permissions = userSession.getAPIPermissions();

    return Object.keys(permissions).map((key,index) => {
      return {name : key, value : key }
    });

  }
  getRoles() {
    var roles = userSession.getAPIRoles();

    return roles.map((item) => {
      return {name : item, value : item}
    })
  }

  componentDidMount() {

    if (this.props.modalUserAccess.displayModal) {
      this.modalOpen();
    }

    this.mounted = true;
  }

  componentWillUnmount() {
    
  }
  
  
  componentDidUpdate(prevProps, prevState) {

    if (!prevProps.modalUserAccess.displayModal && this.props.modalUserAccess.displayModal) {
      this.modalOpen();
    } else if (prevProps.modalUserAccess.displayModal && !this.props.modalUserAccess.displayModal) {
      this.modalClose();
    }
  }

  onModalClose(e) {
    e.preventDefault();
    this.props.closeModalUserAccess();
  }

  modalOpen() {
    TweenMax.to($("#modal-user-access"), 0.5, { opacity: 1, display: "block", ease: Power2.easeInOut });
  }

  modalClose() {

    var self = this;
    TweenMax.to($("#modal-user-access"), 0.5, {
      display: "none", opacity: 0, ease: Power2.easeInOut, onComplete: function () {
      }
    });
  }

  /**
    *   configuration can be changed because some settings or $rule
    *   added directly to PHP. It's necessary to update the json stored in BBDD
    *   to update the avialabe settings, and modifiy if necessary
    */
   updateSettingsFromConfig(field) {
      var config = PAGE_SETTINGS;

      if (config !== undefined) {
          for (var id in config) {
              var setting = config[id];
              if (field.settings[setting] === undefined) {
                  field.settings[setting] = null;
              }
          }
      }

      return field;
  }

  handleFieldSettingsChange(field) {

    ////console.log("ModalEditItem :: handleFieldSettingsChange => ", field);

    const settings = this.props.app.settings;

    settings[field.name] = field.value;

    this.props.changeSettings(settings);
  }

  renderSettings() {

    let field = {
      settings: this.props.app.settings
    };
    field = this.updateSettingsFromConfig(field);

    return (
      <div>
          <h6>{Lang.get('modals.configuration')}</h6>
          <BooleanSettingsField
              field={field}
              name="accessByLink"
              source="settings"
              onFieldChange={this.handleFieldSettingsChange.bind(this)}
              label={'Accessible par le lien'}
          />

          <UserAccessSettingsField
              field={field}
              name="userAccess"
              source="settings"
              permissions={this.permissions}
              roles={this.roles}
              onFieldChange={this.handleFieldSettingsChange.bind(this)}
              label={'Permis d\'accès selon conditions'}
          />
      </div>
    );
  }

  render() {

    return (
      <div>

        <div className="custom-modal" id="modal-user-access" style={{ zIndex: this.props.zIndex }}>
          <div className="modal-background"></div>


          <div className="modal-container">

            
            <div className="modal-header">
              <h2>
                <i className="fas fa-user-shield"></i> 
                Permis d'accès
              </h2>
              <div className="modal-buttons">
                <a className="btn btn-default close-button-modal" onClick={this.onModalClose}>
                  <i className="fa fa-times"></i>
                </a>
              </div>
            </div>
            

            <div className="modal-content">
              <div className="container">
                <div className="row">
                  <div className="col-xs-6 col-xs-offset-3">
                    {this.renderSettings()}
                  </div>
                </div>
              </div>

              <div className="modal-footer">
                <a href="" className="btn btn-default" onClick={this.onModalClose}> {Lang.get('modals.cancel')} </a>
                </div>

            </div>
          </div>
        </div>
      </div>
    );
  }

}


const mapStateToProps = state => {
  return {
    app: state.app,
    modalUserAccess: state.modalUserAccess
  }
}

const mapDispatchToProps = dispatch => {
  return {
    closeModalUserAccess: () => {
      return dispatch(closeModalUserAccess());
    }, 
    changeSettings: (settings) => {
      return dispatch(changeSettings(settings));
    }
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(ModalUserAccess);
