import {
  MODAL_USER_ACCESS_CLOSE,
  MODAL_USER_ACCESS_OPEN
} from "../constants/";


export function openModalUserAccess() {

  return { type: MODAL_USER_ACCESS_OPEN};
};

export function closeModalUserAccess() {

  return { type: MODAL_USER_ACCESS_CLOSE };
};
