import React from 'react';
import axios from 'axios';


class Task extends React.Component{
    state={
        Task:[],
        id:'',
        name:''
        
    }

    componentDidMount(){
        axios.get('http://127.0.0.1:8000/api/task')
      .then(res=>{
        this.setState({
                    Task:res.data
                
                })
      })
       
        // console.log(res.data);
    }
    deleteTask = (id)=>{
         axios.delete(`http://127.0.0.1:8000/api/task/delete/${id}`)
        .then(res=>{
            axios.get('http://127.0.0.1:8000/api/task')
            .then(res=>{
                    this.setState({
                                Task:res.data
                            
                            })
            })
        })
        // window.location.reload();
    }

    addTask =(e)=> {
    e.preventDefault();
        console.log('ok')
        axios.post('http://127.0.0.1:8000/api/task/store',this.state)
       .then(res=>{
        axios.get('http://127.0.0.1:8000/api/task')
        .then(res=>{
                this.setState({
                            Task:res.data
                        
                        })
        })
       }) 
      

    }
   
    handeleInput=(e)=>{
        // console.log(this.state)
        this.setState({
            name:e.target.value
            
        })

    }

    editTask=(id)=>{

       axios.get(`http://127.0.0.1:8000/api/task/${id}`)
        .then(res=>{
            this.setState({
                name:res.data.name,
                id:res.data.id
            })
           
           
        })
        
    }
    updateTask=(e)=>{
        e.preventDefault()
        let id_task = this.state.id
       axios.put(`http://127.0.0.1:8000/api/task/update/${id_task}`,this.state)
        .then(res=>{
           
            axios.get('http://127.0.0.1:8000/api/task')
            .then(res=>{
                    this.setState({
                                Task:res.data
                            
                            })
            })

        })
           
            

    }

   
    render (){
        return(
            <div>
                <form action="" >
                    task : <input name='name' value={this.state.name} type="text" onChange={this.handeleInput}  />
                    <button onClick={this.addTask} type='submit'>add</button>
                    <button type='submit' onClick={this.updateTask}>update</button>
                </form>
               
                <table>
                    <thead>
                        <tr>
                            <td>Task</td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {this.state.Task.map((value)=>
                            <tr key={value.id}>
                                <td>{value.name}</td>
                                <td>
                                    <button type='submit' onClick={this.editTask.bind(this,value.id)}>edit</button>
                                    <button onClick={this.deleteTask.bind(this,value.id)} type='submit'>delete</button>
                                </td>
                            </tr>

                           
                        )}
                        
                         
                       
                    </tbody>
                </table>
            </div>
        )
    }
}
export default Task;