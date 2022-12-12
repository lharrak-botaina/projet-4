import React, {Component} from "react";
import {Link} from "react-router-dom";
import axios from "axios";


class EditTask extends Component{
    state={
        name:''
    }
    handleInput=(e)=>{
        this.setState({
            [e.target.name]:e.target.value
        });
        
    }
 async componentDidMount(){
    const task_id = this.props.match.params.id;
    const res = await axios.get(`http://127.0.0.1:8000/api/task/${task_id}`);
    this.setState({
        name:res.data.name
    })
    // console.log(task_id);
 }
    updateTask=(e)=>{
        const task_id = this.props.match.params.id;
        e.preventDefault();
         axios.put(`http://127.0.0.1:8000/api/task/update/${task_id}`,this.state)
        .then(res=>{
            alert("data has updated")
            window.location.reload()
       
       })
       
       

    }

render(){
    return(
        <div className="container">
            <div className="row">
                <div className="col-md-6">
                    <div className="card">
                        <div className="card-header">
                            <h4>Edit Task</h4>
                            <Link to={'/'} className="btn btn-primary btn-sm float-end"> Back</Link>

                        </div>
                        <div className="card-body"> 
                            <form action="" onSubmit={this.updateTask}>
                                <div className="form-group mb-3">
                                    <label > task name</label>
                                    <input type="text" name="name" onChange={this.handleInput} value={this.state.name} className="form-control"/>

                                </div>
                                <div className="form-group mb-3">
                                   <button type="submit" className="btn btn-primary" >update  </button>

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
export default EditTask;