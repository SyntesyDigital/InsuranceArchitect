import React, { Component } from "react";
import Switch from "react-switch";
import { connect } from 'react-redux';
import {
    changeField
} from './../../actions/';
import {
    TYPE_BOOLEAN
} from './../../constants/';

class BooleanField extends Component {
    constructor(props) {
        super(props);
        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(value) {
        const { field } = this.props;
        this.props.changeField({
            name: field.name,
            value: value,
            type: TYPE_BOOLEAN
        });
    }

    render() {
        const { field } = this.props;
        const errors = this.props.error ? 'has-error' : '';
        const value = this.props.app.fields[field.name] !== undefined &&
            this.props.app.fields[field.name].value ?
            this.props.app.fields[field.name].value : '';
        return (
            <div className={"container-toggle-switch " + errors}>
                <label>
                    <span>{field.label}</span>
                    <Switch
                        checked={value}
                        onChange={this.handleChange.bind(this)}
                        onColor="#86d3ff"
                        onHandleColor="#2693e6"
                        handleDiameter={20}
                        uncheckedIcon={false}
                        checkedIcon={false}
                        boxShadow="0px 1px 5px rgba(0, 0, 0, 0.6)"
                        activeBoxShadow="0px 0px 1px 10px rgba(0, 0, 0, 0.2)"
                        height={10}
                        width={35}
                        className="react-switch"
                        id="material-switch"
                        disabled={field.disabled}
                        name={field.name}
                    />
                </label>
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

export default connect(mapStateToProps, mapDispatchToProps)(BooleanField);