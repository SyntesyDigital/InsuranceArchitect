import {
  MODAL_USER_ACCESS_OPEN,
  MODAL_USER_ACCESS_CLOSE,
} from '../constants';

const initialState =  {
  //modal states
  displayModal: false
}

function modalUserAccessReducer(state = initialState, action) {

    switch(action.type) {
        case MODAL_USER_ACCESS_OPEN :
            return {
                ...state,
                displayModal : true
            }
        case MODAL_USER_ACCESS_CLOSE :
            return {
                ...state,
                displayModal : false
            }
        default:
            return state;
    }
}

export default modalUserAccessReducer;
