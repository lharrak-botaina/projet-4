import React, {Component} from "react";
import {Link} from "react-router-dom";
import axios from "axios";


class AddTask extends Component{
    state={
        name:''
    }
    handleInput=(e)=>{
        this.setState({
            [e.target.name]:e.target.value
        });
        
    }
    saveTask=(e)=>{
        e.preventDefault();
         axios.post('http://127.0.0.1:8000/api/task/store',this.state)
        .then(res=>{
      
        window.location.reload();
       })
       
       

    }

render(){
    return(
        <div className="container">
            <div className="row">
                <div className="col-md-6">
                    <div className="card">
                        <div className="card-header">
                            <h4>Add Task</h4>
                            <Link to={'/'} className="btn btn-primary btn-sm float-end"> Back</Link>

                        </div>
                        <div className="card-body"> 
                            <form action="" onSubmit={this.saveTask}>
                                <div className="form-group mb-3">
                                    <label > task name</label>
                                    <input type="text" name="name" onChange={this.handleInput} value={this.state.name} className="form-control"/>

                                </div>
                                <div className="form-group mb-3">
                                   <button type="submit" className="btn btn-primary">save</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    );
}
}
export default AddTask;