import React, {Component} from 'react';
import { connect } from 'react-redux';

import {
    openModalUserAccess
} from '../../actions';

import {
    VISIBILITY_HIDE,
    VISIBILITY_SHOW,
    CONDITION_FIELD_TYPE_PERMISSION,
    CONDITION_JOIN_OR,
    OPERATOR_EQUAL,
    OPERATOR_DIFFERENT
  } from './../../constants';

class UserAccessButton extends Component {

  constructor(props){
    super(props);
    this.state = {
        pages : []
    };
  }

  componentDidMount(){
      console.log("UserAccessButton :: load pages!");
        this.loadPagesSettings();
  }

  loadPagesSettings() {

    var self = this;

    axios.get(ASSETS+'architect/extranet/content/'+this.props.app.content.id+'/settings')
        .then(function (response) {
            console.log("UserAccessButton :: loadPagesSettings => ",response);

            if(response.status == 200
                && response.data !== undefined)
            {

                var pages = [];
                for( var i = 0; i<response.data.length-1;i++){
                    var item = response.data[i].settings;
                    if(item !== undefined 
                        && item != null 
                        && item != ''){

                        response.data[i].settings = JSON.parse(item);
                    }
                    else {
                        response.data[i].settings = null;
                    }
                    pages.push(response.data[i]);
                }

                self.setState({
                    pages : pages
                });
            }

        }).catch(function (error) {
            console.error('loadPagesSettings  :: ',error);
        });
  }
  
  handleOpenModal(e) {
      e.preventDefault();

      this.props.openModalUserAccess();
  }

  isAccessibleByLink() {
    let settings = this.props.app.settings;

    if(settings.accessByLink === undefined || settings.accessByLink == null){
        return false
    }
    else {
        return settings.accessByLink;
    }
  }

  renderAccessByLink() {
    var accessible = this.isAccessibleByLink();

    if(accessible){
        return (<div><i class="fas fa-link text-success"></i> &nbsp; Accesible via Link </div>);
    }
    else {
        return (<div><i class="fas fa-unlink text-danger"></i> &nbsp; Non accesible via Link </div>);
    }
  }

  hasUserAccessSettings() {
    let settings = this.props.app.settings;

    if(settings.userAccess === undefined || settings.userAccess == null || settings.userAccess == ''){
        return false;
    }
    else {
        return true;
    }
  }

  hasCurrentPageConditions() {
      if(this.hasUserAccessSettings()){
          return this.props.app.settings.userAccess.conditions.length > 0;
      }
      return false;
  }

  hasParentWithSettings() {
      const pages = this.state.pages;
      for(var key in pages){
          if(pages[key].settings.userAccess !== undefined && 
            pages[key].settings.userAccess != null && 
            pages[key].settings.userAccess.conditions !== undefined && 
            pages[key].settings.userAccess.conditions != null &&
            pages[key].settings.userAccess.conditions.length > 0
            ){
                return true;
            }
      }
      return false;
  }

  isVisibleByDefault() {

        let settings = this.props.app.settings;

        //else if parent page is defined 
        if(this.hasParentWithSettings()){
            return false;
        }
        //if there this page is defined, get this page
        else if(this.hasUserAccessSettings()){
            return false;
        }
        
        return true;
  }

  renderDefaultState() {
      if(!this.isVisibleByDefault()){
          return (<div><i class="fas fa-eye-slash text-danger"></i> &nbsp; Invisible par defaut</div>);
      }
      else {
        return (<div><i class="fas fa-eye text-success"></i> &nbsp; Visible par defaut</div>);
      }
  }

  processOperator(operator) {
    switch(operator){
      case OPERATOR_EQUAL :
        return "égal";
      case OPERATOR_DIFFERENT :
        return "différent";
    }
  }

  processCondition(condition,index) {
    //"Or show si type_pol = Hola, asdf, sdfsd "
    if(condition === undefined)
      return null;

    return (
      <span>
          {index != 0 &&
            <span>Ou &nbsp;</span>
          }
          Si <b>{condition.name}</b>
          &nbsp; {this.processOperator(condition.operator)} &nbsp;
          <b>{condition.values}</b>
      </span>
    );
  }

  renderConditions(conditions) {
    if(conditions === undefined || conditions == null)
      return null;

    return conditions.map((item,index) =>
        <li key={index}>
            {this.processCondition(item,index)}
        </li>
    );
  }

  renderPageInfo(page) {
    return <span>Hérité <a href={ASSETS+'architect/contents/'+page.id} target="_blank">
        <i className="fas fa-external-link-alt"></i>&nbsp;{page.title}
    </a></span>
  }

  renderPageConditions(pageSettings,pageInfo) {

    if(pageSettings === undefined || pageSettings == null){
        return null;
    }

    return (
        <div>
            {pageInfo === undefined && 
                <span>Page actuel</span>
            }
            {pageInfo !== undefined && 
                this.renderPageInfo(pageInfo)
            }
            <ul>
                {this.renderConditions(pageSettings.conditions)}
            </ul>
        </div>
    )
  }

  renderParentConditions() {
      return this.state.pages.map((item) => {
        return this.renderPageConditions(item.settings.userAccess,item)
      })
  }

  renderUserAccess() {

      return (
        <div>
            {this.renderDefaultState()}
            
            {(this.hasParentWithSettings() || this.hasCurrentPageConditions()) 
                && 
                <div>
                    <i class="fas fa-eye text-success"></i> &nbsp; Visible si : 
                    <ul>
                        {this.renderParentConditions()}
                        {this.renderPageConditions(this.props.app.settings.userAccess)}
                    </ul>
                </div>
            }
        </div>
        );
  }

  render() {

    return (
        <div className="form-group bmd-form-group sidebar-item">
            <h3 style={{marginTop: 0}}> 
                <i className="fas fa-user-shield"></i> 
                &nbsp; PERMIS D’ACCÈS
                <a href="" 
                    className="btn-link pull-right" 
                    style={{fontSize:16}}
                    onClick={this.handleOpenModal.bind(this)}
                ><i className="fas fa-cog"></i></a>
            </h3>

                <div className="">
                    {this.renderUserAccess()}
                    <br/>
                    {this.renderAccessByLink()}
                </div>
            <hr/>
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
        openModalUserAccess: () => {
            return dispatch(openModalUserAccess());
        },
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(UserAccessButton);
