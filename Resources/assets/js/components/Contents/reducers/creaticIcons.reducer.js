export const creaticIcons = {
    'Sélectionner...': '',
    'creatic-actu_arrow_right': 'actu_arrow_right',
    'creatic-bulletpoint-off': 'bulletpoint-off',
    'creatic-bulletpoint-on': 'bulletpoint-on',
    'creatic-calculette': 'calculette',
    'creatic-calendar': 'calendar',
    'creatic-checkbox-off': 'checkbox-off',
    'creatic-checkbox-on': 'checkbox-on',
    'creatic-dropdown': 'dropdown',
    'creatic-efface_saisie': 'efface_saisie',
    'creatic-euto': 'euto',
    'creatic-geo_arrow-left': 'geo_arrow-left',
    'creatic-geo_arrow-right': 'geo_arrow-right',
    'creatic-ico_accueil': 'ico_accueil',
    'creatic-ico_action_supp_contour': 'ico_action_supp_contour',
    'creatic-ico_action_supp': 'ico_action_supp',
    'creatic-ico_ajouter_hover': 'ico_ajouter_hover',
    'creatic-ico_ajouter': 'ico_ajouter',
    'creatic-ico_alert': 'ico_alert',
    'creatic-ico_brochure': 'ico_brochure',
    'creatic-ico_close': 'ico_close',
    'creatic-ico_contact': 'ico_contact',
    'creatic-ico_contacter_hover': 'ico_contacter_hover',
    'creatic-ico_contacter': 'ico_contacter',
    'creatic-ico_contrat': 'ico_contrat',
    'creatic-ico_contrats': 'ico_contrats',
    'creatic-ico_creer_notification_hover': 'ico_creer_notification_hover',
    'creatic-ico_creer_notification': 'ico_creer_notification',
    'creatic-ico_devis': 'ico_devis',
    'creatic-ico_doc_pdf': 'ico_doc_pdf',
    'creatic-ico_draft': 'ico_draft',
    'creatic-ico_enregistrer': 'ico_enregistrer',
    'creatic-ico_favoris': 'ico_favoris',
    'creatic-ico_info_hover': 'ico_info_hover',
    'creatic-ico_info': 'ico_info',
    'creatic-ico_local_contrat': 'ico_local_contrat',
    'creatic-ico_local_devis': 'ico_local_devis',
    'creatic-ico_localisation': 'ico_localisation',
    'creatic-ico_menu': 'ico_menu',
    'creatic-ico_MRI': 'ico_MRI',
    'creatic-ico_notification': 'ico_notification',
    'creatic-ico_offres': '	ico_offres',
    'creatic-ico_outils': '	ico_outils',
    'creatic-ico_portefeuille': 'ico_portefeuille',
    'creatic-ico_quit': 'ico_quit',
    'creatic-ico_quittance': 'ico_quittance',
    'creatic-ico_rappel': 'ico_rappel',
    'creatic-ico_retour': 'ico_retour',
    'creatic-ico_search': 'ico_search',
    'creatic-ico_sinistre': 'ico_sinistre',
    'creatic-ico_tel': 'ico_tel',
    'creatic-ico_telecharger_hover': 'ico_telecharger_hover',
    'creatic-ico_telecharger': 'ico_telecharger',
    'creatic-ico_voir_hover': 'ico_voir_hover',
    'creatic-ico_voir': 'ico_voir',
    'creatic-illu_geolocalisation': 'illu_geolocalisation',
    'creatic-menu_left': 'menu_left',
    'creatic-menu_right': 'menu_right',
    'creatic-non_valide': 'non_valide',
    'creatic-personnage_heureux': 'personnage_heureux',
    'creatic-supprimer': 'supprimer',
    'creatic-surface': 'surface',
    'creatic-valide': 'valide',
};

var icons = [];
for (var key in creaticIcons) {
    icons.push(key);
}

const initialState = {
    icons: icons
}

function creaticIconsReducer(state = initialState, action) {

    switch (action.type) {
        default:
            return state;
    }
}

export default creaticIconsReducer;