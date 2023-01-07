import i18n from "i18next";
import LanguageDetector from "i18next-browser-languagedetector";
import I18NextHttpBackend from "i18next-http-backend";
import { initReactI18next } from "react-i18next";
import translationAZ from "./public/locales/az/translation.json";
import translationEN from "./public/locales/en/translation.json";

const resources = {
    az: {
      translation: translationAZ
    },
    en: {
      translation: translationEN
    }
  };

i18n.use(I18NextHttpBackend).use(LanguageDetector).use(initReactI18next).init({
 
  
  fallbackLng: "en",
  debug: true,
  resources,
  detection:{
    order:["queryString","cookie"],
    cache:["cookie"]
  },

  
  interpolation: {
    escapeValue: false, 
    
    
  },

  react: {
    wait: true
  }
});

export default i18n;
