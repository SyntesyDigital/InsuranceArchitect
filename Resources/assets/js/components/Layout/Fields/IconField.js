import React, { Component } from 'react';
import PropTypes from 'prop-types';
import Select from 'react-select';

import { fontAwesomeIcons } from './../Icons/';

export default class IconField extends Component {

    constructor(props) {
        super(props);

        var icons = [];

        const hasFontAwesome = SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE !== undefined
            && SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE !== null
            && SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE == true
            ? true
            : false;

        const hasCreaticLib = SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE !== undefined
            && SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE !== null
            && SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE == true
            ? true
            : false;

        if (hasFontAwesome) {
            for (var key in fontAwesomeIcons) {
                icons.push({
                    value: key,
                    label: <span> <i className={key}></i> &nbsp; {key}</span>
                });
            }
        }

        if (hasCreaticLib) {
            //icons svg
            // icons.push({
            //     value: key,
            //     label: <span> <i className={key}></i> &nbsp; {key}</span>
            // });
        }

        for (var key in fontAwesomeIcons) {
            icons.push({
                value: key,
                label: <span> <i className={key}></i> &nbsp; {key}</span>
            });
        }
        
        this.state = {
            icons: icons
        };
    }

    handleOnChange(option) {
        this.props.onChange(this.props.name, option.value);
    }

    getOption(value) {
        if (value === undefined || value == null)
            return null;

        for (var index in this.state.icons) {
            if (this.state.icons[index]['value'] == value)
                return this.state.icons[index]
        }
        return null;
    }

    render() {

        var value = this.getOption(this.props.value);

        return (
            <div className="form-group bmd-form-group icon-field">
                <label htmlFor={this.props.name} className="bmd-label-floating">{this.props.label}</label>
                <Select
                    id={this.props.name}
                    name={this.props.name}
                    value={value}
                    onChange={this.handleOnChange.bind(this)}
                    options={this.state.icons}
                />
            </div>
        )
    }
}

IconField.propTypes = {
    label: PropTypes.string.isRequired,
    name: PropTypes.string.isRequired,
    value: PropTypes.string.isRequired,
    onChange: PropTypes.func
};
