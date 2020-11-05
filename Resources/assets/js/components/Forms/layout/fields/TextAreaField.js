import React, { Component } from 'react';
import { connect } from 'react-redux';
import {
    changeField
} from './../../actions/';

import {
    TYPE_TEXTAREA
} from './../../constants/';

class TextAreaField extends Component {
    constructor(props) {
        super(props);

    }

    handleOnChange(event) {
        this.props.changeField({
            name : event.target.name,
            value : event.target.value,
            type: TYPE_TEXTAREA
        });
    }

    render() {
        const { field } = this.props;
        const errors = this.props.error ? 'has-error' : '';
        const value = this.props.app.fields[field.name] !== undefined &&
            this.props.app.fields[field.name].value ?
            this.props.app.fields[field.name].value : '';
            console.log("<!-- Google Tag Manager -->" , value);
        return (

            <div className={"text-area-field form-group bmd-form-group " + errors}>
                <label className="bmd-label-floating">
                    {field.label}
                </label>
                <textarea
                    id={field.identifier}
                    name={field.name}
                    rows="10"
                    onChange={this.handleOnChange.bind(this)}
                >
                    {value}
                </textarea>
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

export default connect(mapStateToProps, mapDispatchToProps)(TextAreaField);
