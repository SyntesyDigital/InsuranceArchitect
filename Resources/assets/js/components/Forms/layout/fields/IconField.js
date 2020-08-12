import React, { Component } from 'react';
import { connect } from 'react-redux';
import { fontAwesomeIcons } from './Icons/Icons-data';
import Select from 'react-select';
import {
    changeField
} from './../../actions/';
import {
    TYPE_ICON
} from './../../constants/';

class IconField extends Component {

    constructor(props) {

        super(props);

        var icons = [];

        for (var key in fontAwesomeIcons) {
            icons.push({
                value: key,
                label: <span> <i className={key}></i> &nbsp; {key}</span>
            });
        }

        this.state = {
            icons: icons
        };

        this.handleOnChange = this.handleOnChange.bind(this);
    }

    // ==============================
    // Handlers
    // ==============================

    handleOnChange(option) {
        this.props.changeField({
            name: this.props.field.identifier,
            value: option.value,
            type: TYPE_ICON
        });
    }

    // ==============================
    // Getters
    // ==============================

    getOption(value) {

        if (value === undefined || value == null)
            return null;

        for (var index in this.state.icons) {
            if (this.state.icons[index]['value'] == value)
                return this.state.icons[index]
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

        const options = this.state.icons.map(
            item => ({
                label: item.label,
                value: item.value,
            }));

        var optionIndex = this.getOption(value);

        return (
            <div className={'form-group bmd-form-group '}>
                <label className="bmd-label-floating">
                    {field.label}
                </label>
                <Select
                    value={optionIndex}
                    name={field.identifier}
                    defaultValue={optionIndex != null ? options[optionIndex] : ''}
                    options={options}
                    onChange={this.handleOnChange.bind(this)}
                    placeholder={'Sélectionner...'}
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

export default connect(mapStateToProps, mapDispatchToProps)(IconField);

