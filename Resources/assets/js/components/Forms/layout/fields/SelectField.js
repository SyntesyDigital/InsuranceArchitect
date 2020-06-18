import React, { Component } from 'react';
import Select from 'react-select';
import {connect} from 'react-redux';
import {
    changeField
  } from './../../actions/';
import {
    TYPE_SELECT
  } from './../../constants/';


class SelectField extends Component {

  constructor(props) {

    super(props);

    this.handleOnChange = this.handleOnChange.bind(this);
  }

  
  // ==============================
  // Handlers
  // ==============================

  handleOnChange(option) {
    this.props.changeField({
      name: this.props.field.identifier,
      value: option.value,
      type: TYPE_SELECT
    });
  }
  
  // ==============================
  // Getters / Setters
  // ==============================

  getOption(value) {
    const { field } = this.props;
    if (value === undefined || value == null)
      return null;

    for (var index in field.options) {
      if (field.options[index]['value'] == value)
        return index;
    }
    return null;
  }

  // ==============================
  // Renderers
  // ==============================

  render() {
    const { field } = this.props;

    const value = this.props.app.fields[field.name] !== undefined &&
      this.props.app.fields[field.name].value ?
      this.props.app.fields[field.name].value : '';

    const options = field.options.map(
      item => ({
        label: item.name,
        value: item.value,
      }));    

    var optionIndex = this.getOption(value);

    const customStyles = {
      control: (base) => ({
        ...base,
        height: 36,
        minHeight: 36,
        boxShadow: '1 !important',
      }),
      menu: provided => ({ ...provided, zIndex: 99999 })
    };

    return (

      <div className={"form-group bmd-form-group"}>
        <label className="bmd-label-floating">
          {field.label}
        </label>
        <Select
          value={options[value]}
          name={field.identifier}
          defaultValue={optionIndex != null ? options[optionIndex] : ''}
          options={options}
          onChange={this.handleOnChange.bind(this)}
          styles={customStyles}
          placeholder={'Sélectionnez...'}
          menuContainerStyle={{'zIndex': 999}}
          theme={(theme) => ({
            ...theme,
            borderRadius: '0',
            height: '34px',
            colors: {
              ...theme.colors,
              primary25: '#4a9fea',
              primary: '#4a9fea',
            },
          })}
        />
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

export default connect(mapStateToProps, mapDispatchToProps)(SelectField);
