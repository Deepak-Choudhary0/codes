import { createSlice, PayloadAction } from "@reduxjs/toolkit";

interface ValueState {
  value: string | null;
}

const initialState: ValueState = {
  value: null,
};

const valueSlice = createSlice({
  name: "value",
  initialState,
  reducers: {
    setValue: (state, action: PayloadAction<string>) => {
      state.value = action.payload;
    },
  },
});

export const { setValue } = valueSlice.actions;

export default valueSlice.reducer;
