import React from "react";
import { Box, Heading } from "@chakra-ui/react";
import { useSelector } from "react-redux";
import { RootState } from "./store";

const GitHub = () => {
  const inputValue = useSelector((state: RootState) => state.value.value);

  return (
    <Box textAlign="center" fontSize="xl" p={5}>
      <Heading>First Page</Heading>
      <p>Input value: {inputValue}</p>
    </Box>
  );
};

export default GitHub;
