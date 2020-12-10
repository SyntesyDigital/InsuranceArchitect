import React, { Component } from 'react';
import { connect } from 'react-redux';
import { fontAwesomeIcons } from './Icons/Icons-data';
import { creaticIcons } from './Icons/Creatic-icons';
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
        this.state = {
            icons: []
        };

        this.handleOnChange = this.handleOnChange.bind(this);
        this.getLibIcons = this.getLibIcons.bind(this);
    }

    componentDidMount() {
        this.getLibIcons();
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
    getFieldValue(field) {

        if (field.value) {
            if (field.value[DEFAULT_LOCALE]) {
                return field.value[DEFAULT_LOCALE];
            }
            else {
                return field.value;
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

        var fieldValue = this.getFieldValue(this.props.field);
        fieldValue = this.getFontAwesomeIcon(fieldValue);

        var optionIndex = this.getOption(fieldValue);


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

