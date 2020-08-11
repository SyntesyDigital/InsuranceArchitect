import React, { Component } from 'react';
import { connect } from 'react-redux';
import {
} from './../actions/';
import TextField from './fields/TextField';
import ImageField from './fields/ImageField';
import NumberField from './fields/NumberField';
import ColorField from './fields/ColorField';
import RichTextField from './fields/RichTextField';
import FontField from './fields/FontField';
import BooleanField from './fields/BooleanField';
import SelectField from './fields/SelectField';
import IconField from './fields/IconField';

class Field extends Component {

    constructor(props) {
        super(props);
    }

    renderField() {

        const { data } = this.props;

        switch (data.input) {
            case 'text':
                return (
                    <TextField
                        field={data}
                    />
                );

            case 'richtext':
                return (
                    <RichTextField
                        field={data}
                    />
                );
            case 'font':
                return (
                    <FontField
                        field={data}
                    />
                );
            case 'image':
                return (
                    <ImageField
                        field={data}
                    />
                );

            case 'number':
                return (
                    <NumberField
                        field={data}
                    />
                );
            case 'color':
                return (
                    <ColorField
                        field={data}
                    />
                );
            case 'boolean':
                return (
                    <BooleanField
                        field={data}
                    />
                );
            case 'select':
                return (
                    <SelectField
                        field={data}
                    />
                );

            case 'icon':
                return (
                    <IconField
                        field={data}
                    />
                );
            default:
                return null;
        }

    }

    render() {

        return (
            <div className="field">
                {this.renderField()}
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
        /*
        changeField: (field) => {
            return dispatch(changeField(field));
        }
        */
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(Field);
