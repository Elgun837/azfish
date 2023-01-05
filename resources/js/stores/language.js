import { createSlice } from "@reduxjs/toolkit";

export const  language = createSlice({
    name: 'language',
    initialState: {
        language: "az"
    },
    reducers:{
        setLanguage: (state,action) => {
            state.language = action.payload
        }
    }
})

export const  setLanguage = language.actions

export default language.reducer