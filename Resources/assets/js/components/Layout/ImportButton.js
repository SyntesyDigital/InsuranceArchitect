import React, { Component } from 'react';
import PropTypes from 'prop-types';
import Modal from '../Layout/Modal';
import { FilePicker } from 'react-file-picker'

const styles = {
    display: 'inline-block',
}
export default class ImportButton extends Component {

    constructor(props) {
        super(props);
        this.state = {
            display: false,
            loading : false,
            file : null,
            base64 : null,
            type : null,
            name : ''
        }
    }

    handleOnChange(FileObject) {

        var self = this;

        this.setState({
            file : FileObject,
            name : FileObject.name,
            type : FileObject.type,
            loading : true
        },self.getBase64.bind(self))
    }

    updateFile() {
        //update all fields
        //name : this.props.field.identifier,
        //value : this.state.base64

        

        //process json and return.
        console.log("updateFile!",JSON.parse(window.atob(this.state.base64)));
    }

    /**
     *   Get file info.
     */
    getBase64() {
        let reader = new FileReader();
        var self = this;

        reader.readAsDataURL(this.state.file);

        reader.onload = function () {

            var base64Array = reader.result.split(',');

            self.setState({
                base64 : base64Array.length > 0 ? base64Array[1] : null,
                loading : false
            },self.updateFile.bind(self));

        };
        reader.onerror = function (error) {
            console.error('FileField :: ', error);
        };
    }

    handleError(message) {
        toastr.error(message);
        console.error("FileField :: "+message);
    }

    openModal(e){
        if (e !== undefined) {
            e.preventDefault();
        }
        this.setState({
            display: true
        });
    }

    closeModal() {
        this.setState({
            display: false
        });
    }

    render() {
        return (
            <div style={styles}>
                <Modal
                    id={'modal-result-import'}
                    icon={'fas fa-download'}
                    title={'Résultat de l\'importation'}
                    display={this.state.display}
                    zIndex={10000}
                    size={'medium'}
                    onModalClose={this.closeModal.bind(this)}
                    submitButton={false}
                    cancelButton={false}
                    deleteButton={false}
                >
                    <div className="row rightbar-page">
                        <div className="col-md-4 col-xs-12">
                            <p className="success">Éxito <i className="fas fa-check"></i></p>
                            <p className="error">Error <i className="fas fa-times"></i></p>
                            <p>Se han importado :</p> 
                            <ul>
                                <li>4 Elementos</li>
                                <li>5 Modelos Satisfactoriamente.</li>
                            </ul>
                            <p>Items no importados por repetición :</p> 
                            <ul>
                                <li>3 Elementos </li>
                                <li>3 Elementos </li>
                            </ul>
                        </div>
                    </div>
                </Modal>

                <FilePicker
                    extensions={['json']}
                    onChange={this.handleOnChange.bind(this)}
                    onError={this.handleError.bind(this)}
                >
                    <a className="btn btn-default" href="#">
                        <i className={this.props.icon}></i>
                        &nbsp;&nbsp;
                        {this.props.label}
                    </a>
                </FilePicker>
            </div>
            
        );
    }
}

ImportButton.propTypes = {
    label: PropTypes.string.isRequired,
    icon: PropTypes.string,
    onClick: PropTypes.func,
    route: PropTypes.string,
    importApi: PropTypes.string,
    onSuccess: PropTypes.func,
    onError: PropTypes.func
};

