import * as React from "react"
import { Stack, InputGroup, Input, InputLeftAddon, InputRightAddon, } from "@chakra-ui/react";
import { BrowserRouter as Router, Route, Link, Routes } from "react-router-dom";
import {
  ChakraProvider,
  Box,
  Text,
  VStack,
  Code,
  Grid,
  theme,
} from "@chakra-ui/react"
import { ColorModeSwitcher } from "./ColorModeSwitcher"
import { useState } from "react";
import { Button } from "@chakra-ui/react";
import GitHub from "./github";
import { Provider } from "react-redux";
import store from "./store";
function SubmitButton() {
  const [isLoading, setIsLoading] = useState(false);
  const [inputValue, setInputValue] = useState("");
  const [isSubmitted, setIsSubmitted] = React.useState(false);
  const handleInputChange = (event: React.ChangeEvent<HTMLInputElement>) => {
    const value = event.target.value;
    setInputValue(value);
  };

  const handleClick = () => {
    setIsLoading(true);
    console.log(inputValue);

    setIsSubmitted(true);

    // Simulate a 10-second wait
    setTimeout(() => {
      setIsLoading(false);
    }, 1000);
  };

  return (
    <Stack spacing={4}>
      {/* If you add the size prop to `InputGroup`, it'll pass it to all its children. */}
      <InputGroup size='sm'>
        <InputLeftAddon children='https://github.com/' />
        <Input placeholder='username' value={inputValue}
        onChange={handleInputChange}/>
      </InputGroup>
      <Link to="/github">
      <Button
      colorScheme="teal"
      variant="solid"
      isLoading={isLoading}
      onClick={handleClick}
    >
        Get Details!
      </Button>
      </Link>
    </Stack>
  );
}


export const App = () => (
  <ChakraProvider theme={theme}>
    <Router>
    <Box textAlign="center" fontSize="xl">
      <Grid minH="100vh" p={3}>
        <ColorModeSwitcher justifySelf="flex-end" />
        
          <VStack spacing={8}>
            <Text>
              Put your GITHUB username in this input field
            </Text>
            <SubmitButton/>
          </VStack>
        
      </Grid>
    </Box>
    <Routes>
      <Route path="/github" Component={GitHub} />
    </Routes>
    </Router>
  </ChakraProvider>
)