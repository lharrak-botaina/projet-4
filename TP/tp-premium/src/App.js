import React from "react";
import {BrowserRouter as Router,Switch,Route} from 'react-router-dom';
import Task from "./pages/Task";
import AddTask from "./pages/AddTask";
import EditTask from "./pages/EditTask";
import Chart from "./pages/chart";
function App() {
 
  return (
    <div>
      <Router>
      <Switch>
        <Route exact path="/" component={Task}/>
        <Route exact path="/add-task" component={AddTask}/>
        <Route path="/edit-task/:id" component={EditTask}/>
      </Switch>
    </Router>
    <Chart/>
    </div>
   
    
    
  );
}

export default App;
