import React, {Component} from 'react';
import reactCSS from 'reactcss'
import { render } from 'react-dom';
import {connect} from 'react-redux';
import { SketchPicker } from 'react-color';

import {
  changeField
} from './../../actions/';

import {
  TYPE_COLOR
} from './../../constants/';

class ColorField extends Component
{
  constructor(props)
  {
    super(props);

    this.state = {
      displayColorPicker: false,
    };

  }

  handleClick(){
    this.setState({ displayColorPicker: !this.state.displayColorPicker })
  }

  handleRemove(){

    event.preventDefault();

    const {field} = this.props;

    this.props.changeField({
      name : field.name,
      value : '',
      type : TYPE_COLOR
    });
    
  }

  handleClose(){
    this.setState({ displayColorPicker: false })
  }

  handleOnChange(event)
  {
    const {field} = this.props;

    this.props.changeField({
      name : field.name,
      value : event.hex,
      type : TYPE_COLOR
    });


  }

  render() {

    const {field} = this.props;
    const errors = this.props.error ? 'has-error' : '';
    const value = this.props.app.fields[field.name] !== undefined &&
      this.props.app.fields[field.name].value ?
      this.props.app.fields[field.name].value : '#000';

      const styles = reactCSS({
        'default': {
          color: {
            background: value
          },

        },
      });


    return (

      <div className={"form-group bmd-form-group color-field-container"+errors}>
          <label className="bmd-label-floating">
            {field.label}
          </label>

          <div className="color-field-swatch"  onClick={ this.handleClick.bind(this) }>
            <div className="color-field-color" style={ styles.color } />
            <a href="#" onClick={this.handleRemove.bind(this)} class="btn btn-link text-danger"><i class="fa fa-times"></i></a>

          </div>
          { this.state.displayColorPicker &&
            <div className="color-field-popover" >
              <div className="color-field-cover"  onClick={ this.handleClose.bind(this) }/>
              <SketchPicker
                id={field.identifier}
                name={field.name}
                color={ value }
                onChange={ this.handleOnChange.bind(this) } />
            </div>
          }
      </div>
    );
  }

}


const mapStateToProps = state => {
    return {
        app: state.app
    }
}

const mapDispatchToProps = dispatch => {
    return {
        changeField: (field) => {
            return dispatch(changeField(field));
        }
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(ColorField);
