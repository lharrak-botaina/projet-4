import React from "react";
import axios from "axios";
class Table extends React.Component{
    constructor(props){
        super(props);
        this.state={
            name:[],
            id:'',
            data:[]
        }
    }
   async componentDidMount(){
        await axios.get("http://127.0.0.1:8000/api/task")
        .then(res=>{
            console.log(res.data)
            this.setState({
                data:res.data
               
            })
            
        })
    }


    render(){
        return(
            <div>
               <table className="table">
                <thead>
                    <tr>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>

               </table>
            </div>
        )
    }
}
export default Table;