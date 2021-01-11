import React, {Component} from 'react';
import { render } from 'react-dom';

import SettingsField from './SettingsField';
import InputField from '../../Layout/Fields/InputField';
import IconFieldExtranet from '../../Layout/Fields/IconFieldExtranet';

class InputSettingsTopBar extends Component {

  constructor(props) {
    super(props);
  }

  /**
   *  Define what happen when input change
   */
  handleInputChange(name,value) {

    var fieldValue = this.props.field[this.props.source][this.props.name];

    if(fieldValue == null || fieldValue == ''){
      fieldValue = {
        title : '',
        icon : ''
      };
    }
    fieldValue[name] = value;

    var field = {
      name : this.props.name,
      source : this.props.source,
      value : fieldValue
    };

    architect.log("InputSettingsTopBar :: handleInputChange :: ",field);

    this.props.onFieldChange(field);
  }

  getDefaultValue(){
    return {
      title : '',
      icon : ''
    };
  }

  render() {

    if(this.props.field == null || this.props.field[this.props.source] == null || 
      this.props.field[this.props.source][this.props.name] === undefined)
      return null;

    const title = this.props.field[this.props.source][this.props.name] !== null && this.props.field[this.props.source][this.props.name]['title'] !== null?this.props.field[this.props.source][this.props.name]['title']:null;
    const icon = this.props.field[this.props.source][this.props.name] !== null && this.props.field[this.props.source][this.props.name]['icon'] !== null?this.props.field[this.props.source][this.props.name]['icon']:null;

    //value is null, when setting field is disabled

    return (
      <SettingsField
        field={this.props.field}
        onFieldChange={this.props.onFieldChange}
        label={this.props.label}
        name={this.props.name}
        source={this.props.source}
        defaultValue={this.getDefaultValue()}
      >

        <InputField
          label={this.props.inputLabel}
          name={'title'}
          value={title != null ? title : ''}
          onChange={this.handleInputChange.bind(this)}
        />

        <IconFieldExtranet
            label={this.props.selectLabe}
            name={'icon'}
            value={icon != null ? icon : ''}
            onChange={this.handleInputChange.bind(this)}
        />

      </SettingsField>
    );
  }

}
export default InputSettingsTopBar;
