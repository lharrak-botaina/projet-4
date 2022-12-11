import React, {Component} from "react";
import {Link} from "react-router-dom";
import axios from "axios";


class Task extends Component{
    state = {
        Task:[],
        loading:true,
    }
   async componentDidMount(){
        const res = await axios.get('http://127.0.0.1:8000/api/task')
        // console.log(res.data)
        this.setState({
            Task:res.data,
            loading:false,
        })

    }
    deleteTask = async (e,id)=>{
        const res =await axios.delete(`http://127.0.0.1:8000/api/task/delete/${id}`)
        alert("data has been deleted")
        window.location.reload()
    }
    
       
    

   
render(){
    var Task_HTMLTABLE =""
    if(this.state.loading){
        Task_HTMLTABLE=<tr><td colSpan="7"><h2>Loading.....</h2></td></tr>
    }
    else{
        Task_HTMLTABLE=
        this.state.Task.map((item)=>{
            return(
                <tr key={item.id}>
                   
                    <td>{item.name}</td>
                   
                    <td>
                        <Link to={`edit-task/${item.id}`} className="btn btn-success btn-sm">Edit</Link>
                    </td>
                    <td>
                        <button type="button" onClick={(e)=>this.deleteTask(e,item.id)} className="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            )
        })
    }
    return(
        <div className="container">
            <div className="row">
                <div className="col-md-12">
                    <div className="card">
                        <div className="card-header">
                            <h4>task data</h4>
                            <Link to={'add-task'}  className="btn btn-primary btn-sm float-end"> Add task</Link>

                        </div>
                        <div className="card-body"> 
                            <table className="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                               
                                <tbody>
                                  {Task_HTMLTABLE}
                                 
                                    
                                </tbody>
                             

                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    );
}
}
export default Task;