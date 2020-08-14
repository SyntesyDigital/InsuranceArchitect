import React, {Component} from 'react';

import SettingsField from './../SettingsField';
import { BoxAddGroup } from "architect-components-library";

import {
  VISIBILITY_HIDE,
  VISIBILITY_SHOW,
  CONDITION_FIELD_TYPE_PARAMETER,
  CONDITION_JOIN_OR,
  OPERATOR_EQUAL,
  OPERATOR_DIFFERENT
} from './../../../constants';

import UserAccessModal from './UserAccessModal';

export default class UserAcessSettingsField extends Component {

  constructor(props) {
    super(props);

    this.state = {
      modalDisplay : false,
      conditionIndex : null,
      selectedContidion : null
    }

    this.visibilityOptions = [
      {
          name : 'Invisible',
          value : VISIBILITY_HIDE,
      },
      {
          name : 'Visible',
          value : VISIBILITY_SHOW
      }
    ];
  }

  /**
  *   Conditions have by default the opposite default condition, hide or show.
  */
  getConditionalAction() {

    const value = this.getVisibilityValue();

    if(value !== undefined && value != null && value.initialValue !== undefined){
        for(var key in this.visibilityOptions){
          if(this.visibilityOptions[key].value != value.initialValue){
            return this.visibilityOptions[key];
          }
        }
    }
    return null;
  }

  getConditions() {

    const value = this.getVisibilityValue();

    if(value !== undefined && value != null && value.conditions !== undefined){
      return value.conditions;
    }
    return [];
  }

  getDefaultVisibilityValue() {
    return {
      initialValue : VISIBILITY_HIDE,
      conditions : []
    };

    /*
      {
        'initialValue' : 'hide',
        'conditions' : [
          {
            'action' : '' //opposite by default
            'join' : 'and/or' //only appear second condition
            'type' : 'parameters',
            'name' : ,
            'operator : '=,!=',
            'options : [],  //list of options
            'values' : [] //selected options

          },

        ]
      }
    */
  }

  //update state from formated value
  setVisibilityValue(initialValue,conditions) {
    //proces if needed
    return {
      'initialValue' : initialValue,
      'conditions' : conditions
    };
  }


  //get value to process field
  getVisibilityValue() {
    return this.props.field[this.props.source][this.props.name];
  }


  handleInputChange(event) {

    const value = this.getVisibilityValue();

    var field = {
      name : this.props.name,
      source : this.props.source,
      value : this.setVisibilityValue(
        event.target.value,
        value.conditions
      )
    };

    this.props.onFieldChange(field);
  }

  renderOptions() {
    return (this.visibilityOptions.map((item,i) => (
        <option value={item.value} key={i}>{item.name}</option>
      ))
    );
  }

  onConditionEdit(index,e){
    e.preventDefault();

    var self = this;
    this.setState({
      selectedContidion : index
    },function(){
      self.setState({
        modalDisplay : true
      });
    });
  }

  onConditionRemove(index,e){
    e.preventDefault();

    var self = this;

    bootbox.confirm({
        message: 'Êtes-vous sûr de supprimer définitivement ce condition',
        buttons: {
            confirm: {
                label: Lang.get('fields.si'),
                className: 'btn-primary'
            },
            cancel: {
                label: Lang.get('fields.no'),
                className: 'btn-default'
            }
        },
        callback: function (result) {
          if(result){

            var conditions = self.getConditions();

            conditions.splice(index,1);

            //console.log("onConditionRemove :: ",conditions);

            self.updateConditions(conditions);
          }
        }
    });

  }

  processCondition(condition,index) {
    //"Or show si type_pol = Hola, asdf, sdfsd "
    if(condition === undefined)
      return null;

    var conditionalAction = this.getConditionalAction();

    return (
      <span>
          {index != 0 &&
            <span>Ou &nbsp;</span>
          }
          {conditionalAction.name} si <b>{condition.name}</b>
          &nbsp; {this.processOperator(condition.operator)} &nbsp;
          <b>{condition.values}</b>
      </span>
    );
  }

  processOperator(operator) {
    switch(operator){
      case OPERATOR_EQUAL :
        return "égal";
      case OPERATOR_DIFFERENT :
        return "différent";
    }
  }

  renderConditions() {
    var value = this.getVisibilityValue();
    if(value.conditions === undefined)
      return null;

    return value.conditions.map((item,index) =>
      <div className="condition-item row" key={index}>
        <div className="col-sm-9">
          {this.processCondition(item,index)}
        </div>
        <div className="col-sm-3 text-right">

          <a href="" onClick={this.onConditionEdit.bind(this,index)} className="">
            <i className="fas fa-pencil-alt"></i>
          </a> &nbsp;
          <a href="" onClick={this.onConditionRemove.bind(this,index)} className="text-danger">
            <i className="fas fa-trash"></i>
          </a>
        </div>
      </div>
    );
  }

  openModal() {

    const value = this.getVisibilityValue();
    value.conditions.push(this.getDefaultConditionValue());

    var self = this;
    this.setState({
      value : value,
      selectedContidion : value.conditions.length -1
    },function(){
      self.setState({
        modalDisplay : true
      });
    });
  }

  getDefaultConditionValue() {
    return {
      join : CONDITION_JOIN_OR,
      type : CONDITION_FIELD_TYPE_PARAMETER,
      name : '',
      operator : OPERATOR_EQUAL,
      values : ''
    }
  }

  handleModalClose() {
    this.setState({
      modalDisplay : false,
      selectedContidion : null
    });
  }

  handleConditionChange(conditions) {

    //console.log("handleConditionChange :: ",conditions);

    this.updateConditions(conditions);
  }

  updateConditions(conditions) {

    const value = this.getVisibilityValue();

    value.conditions = conditions;

    var field = {
      name : this.props.name,
      source : this.props.source,
      value : value
    };

    this.props.onFieldChange(field);
  }


  render() {

    const value = this.getVisibilityValue();
    //value is null, when setting field is disabled

    return (
      <SettingsField
        field={this.props.field}
        onFieldChange={this.props.onFieldChange}
        label={this.props.label}
        name={this.props.name}
        source={this.props.source}
        defaultValue={this.getDefaultVisibilityValue()}
      >

          <UserAccessModal
            display={this.state.modalDisplay}
            onModalClose={this.handleModalClose.bind(this)}
            initialValue={this.getConditionalAction()}
            conditions={this.getConditions()}
            conditionIndex={this.state.selectedContidion}
            onConditionChange={this.handleConditionChange.bind(this)}
          />

          {value != null && 
            <div className="form-group conditions-list">
                {this.renderConditions()}
            </div>
          }

          <BoxAddGroup 
            title="Ajouter une condition"
            onClick={this.openModal.bind(this)}
          />


      </SettingsField>
    );
  }

}
