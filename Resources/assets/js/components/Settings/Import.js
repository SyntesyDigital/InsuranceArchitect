import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import ImportButton from './../Layout/ImportButton';

export default class Import extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <ImportButton
                label="IMPORTER"
                icon="fas fa-download"
            />
            
        );
    }
}


if (document.getElementById('import')) {
    ReactDOM.render(<Import />, document.getElementById('import'));
}
