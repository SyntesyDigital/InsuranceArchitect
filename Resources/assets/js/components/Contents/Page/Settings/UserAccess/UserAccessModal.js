import React, {Component} from 'react';

import { Modal } from "architect-components-library";

import {
  OPERATOR_EQUAL,
  OPERATOR_DIFFERENT,
  CONDITION_FIELD_TYPE_PARAMETER
} from './../../../constants/';

class UserAccessModal extends Component {

  constructor(props) {
    super(props);

    this.operators = [
      {
        name : "Égal",
        value : OPERATOR_EQUAL
      },
      {
        name : "Différent",
        value : OPERATOR_DIFFERENT
      }
    ];

    this.types = [
      {
        name : "Paramètre",
        value : CONDITION_FIELD_TYPE_PARAMETER
      }
    ];

    this.handleInputChange = this.handleInputChange.bind(this);

  }

  loadFields() {
    //TODO load all fileds types
  }

  handleInputChange(e) {
    //TODO
    const conditions = this.props.conditions;

    conditions[this.props.conditionIndex][e.target.name] = e.target.value;
    this.props.onConditionChange(conditions);
  }

  renderOperators() {

    console.log("this.operators => ",this.operators);

    return this.operators.map((item,index) =>
      <option key={index} value={item.value}> {item.name}</option>
    );
  }

  renderTypes() {
    return this.types.map((item,index) =>
      <option key={index} value={item.value}> {item.name}</option>
    );
  }

  render() {

    if(this.props.conditionIndex == null)
      return null;

    const condition = this.props.conditions[this.props.conditionIndex];

    if(condition === undefined)
      return null;

    return (
      <Modal
        id={'modal-user-access'}
        // icon={this.props.icon}
        title={'Permis d\'accès'}
        display={this.props.display}
        zIndex={1000000}
        onModalClose={this.props.onModalClose}
        // onCancel={this.props.cancelEditGroup}
        // onRemove={this.handleRemove.bind(this)}
        // onSubmit={this.handleSubmit.bind(this)}
        size={'medium'}
      >

      </Modal>
    );
  }

}
export default UserAccessModal;
