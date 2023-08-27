import React, { useState } from 'react';
import { Box, Heading, VStack, FormControl, FormLabel, Select, Input, Button } from '@chakra-ui/react';

const TaskBoard = () => {
  const [tasks, setTasks] = useState([]);

  const addTask = (task) => {
    setTasks([...tasks, task]);
  };

  const deleteTask = (taskId) => {
    const updatedTasks = tasks.filter((task) => task.id !== taskId);
    setTasks(updatedTasks);
  };

  return (
    <Box p={8} maxW="600px" mx="auto">
      <Heading as="h1" size="xl" mb={8} textAlign="center">
        Task Collaboration Board
      </Heading>
      <TaskForm addTask={addTask} />
      <VStack mt={8} spacing={4} align="stretch">
        <TaskColumn title="To Do" tasks={tasks.filter((task) => task.status === 'todo')} deleteTask={deleteTask} />
        <TaskColumn title="In Progress" tasks={tasks.filter((task) => task.status === 'inprogress')} deleteTask={deleteTask} />
        <TaskColumn title="Done" tasks={tasks.filter((task) => task.status === 'done')} deleteTask={deleteTask} />
      </VStack>
    </Box>
  );
};

const TaskForm = ({ addTask }) => {
  const [title, setTitle] = useState('');
  const [status, setStatus] = useState('todo');

  const handleSubmit = (e) => {
    e.preventDefault();
    const newTask = { id: Date.now(), title, status };
    addTask(newTask);
    setTitle('');
    setStatus('todo');
  };

  return (
    <Box as="form" onSubmit={handleSubmit} mb={8}>
      <VStack spacing={4} align="stretch">
        <FormControl>
          <FormLabel>Task Title</FormLabel>
          <Input type="text" value={title} onChange={(e) => setTitle(e.target.value)} placeholder="Enter task title" required />
        </FormControl>
        <FormControl>
          <FormLabel>Task Status</FormLabel>
          <Select value={status} onChange={(e) => setStatus(e.target.value)}>
            <option value="todo">To Do</option>
            <option value="inprogress">In Progress</option>
            <option value="done">Done</option>
          </Select>
        </FormControl>
        <Button type="submit" colorScheme="teal">
          Add Task
        </Button>
      </VStack>
    </Box>
  );
};

const TaskColumn = ({ title, tasks, deleteTask }) => {
  const handleDelete = (taskId) => {
    deleteTask(taskId);
  };

  return (
    <Box p={4} borderWidth="1px" borderRadius="md">
      <Heading as="h2" size="md" mb={4}>
        {title}
      </Heading>
      {tasks.map((task) => (
        <Box key={task.id} p={4} borderWidth="1px" borderRadius="md" mb={4}>
          <Heading as="h3" size="sm" mb={2}>
            {task.title}
          </Heading>
          <Box mb={2}>
            <strong>Status:</strong> {task.status}
          </Box>
          <Button variant="outline" size="sm" colorScheme="red" onClick={() => handleDelete(task.id)}>
            Delete
          </Button>
          </Box>
  ))}
</Box>
);
};

export default TaskBoard;