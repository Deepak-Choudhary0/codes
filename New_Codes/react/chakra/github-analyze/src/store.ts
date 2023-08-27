import { combineReducers, configureStore } from "@reduxjs/toolkit";
import valueReducer from "./valueSlice";

const rootReducer = combineReducers({
  value: valueReducer,
});

export type RootState = ReturnType<typeof rootReducer>;

const store = configureStore({
  reducer: rootReducer,
});

export default store;
