import React, { Component } from 'react';
import SettingsField from './SettingsField';
import Select from 'react-select';
import { creaticIcons } from './../Icons/Creatic-icons';
import { fontAwesomeIcons } from './../Icons/Icons-data';

class IconSettingsField extends Component {

    constructor(props) {
        super(props);
        this.state = {
            icons: []
        };
        this.getLibIcons = this.getLibIcons.bind(this);
    }


    componentDidMount() {
        this.getLibIcons();
    }

    // ==============================
    // Handlers
    // ==============================

    handleInputChange(option) {

        var field = {
            name: this.props.name,
            source: this.props.source,
            value: option.value
        };

        this.props.onFieldChange(field);
    }

    // handleOnChange(option) {
    //     this.props.onChange(this.props.name, option.value);
    // }

    // ==============================
    // Getters
    // ==============================

    getLibIcons() {

        var icons = [];

        if (hasFontAwesome()) {
            for (var key in fontAwesomeIcons) {
                icons.push({
                    value: key,
                    label: <span> <i className={key}></i> &nbsp; {key}</span>
                });
            }
        }

        if (hasCreaticLib()) {
            for (var key in creaticIcons) {
                icons.push({
                    value: key,
                    label: <span>
                        <svg className={'icon ' + key}>
                            <use xlinkHref={'#' + key}></use>
                        </svg> &nbsp; {key}
                    </span>
                });
            }
        }

        this.setState({
            icons: icons
        });
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


    //procesamos el field si viene o no con idioma
    getFieldValue(value) {

        if (value) {
            if (value[DEFAULT_LOCALE]) {
                return value[DEFAULT_LOCALE];
            }
            else {
                return value;
            }
        }
        return '';
    }
    // procesamos la clave del icono para convertir a fontawesome v.4 ->
    // -> o retornar el value que tenga
    getFontAwesomeIcon(key) {

        var explode = key.split(' ');

        if (explode[0] == 'fa') {
            explode[0] = 'fas';
            return explode.join(' ');

        } else {
            return key;
        }
    }

    render() {

        if (this.props.field == null || this.props.field[this.props.source] == null ||
            this.props.field[this.props.source][this.props.name] === undefined)
            return null;



        var fieldValue = this.getFieldValue(this.props.field[this.props.source][this.props.name]);
        fieldValue = this.getFontAwesomeIcon(fieldValue);

        var value = this.getOption(fieldValue);

        return (
            <SettingsField
                field={this.props.field}
                onFieldChange={this.props.onFieldChange}
                label={this.props.label}
                name={this.props.name}
                source={this.props.source}
                defaultValue={''}
            >
                <div className="form-group bmd-form-group">
                    <Select
                        id={this.props.name}
                        name={this.props.name}
                        value={value}
                        onChange={this.handleInputChange.bind(this)}
                        options={this.state.icons}
                    />
                </div>
            </SettingsField>
        );
    }
}

function hasFontAwesome() {
    return SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE !== undefined
        && SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE !== null
        ? !SITE_CONFIG_GENERAL.FONTAWESOME_IS_ACTIVE.value
        : true;
}

function hasCreaticLib() {
    return SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE !== undefined
        && SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE !== null
        ? SITE_CONFIG_GENERAL.CREATIC_LIB_IS_ACTIVE.value
        : false;
}

export default IconSettingsField;
