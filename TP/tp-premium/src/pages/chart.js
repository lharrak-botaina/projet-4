import React from 'react'
import { Chart  } from 'chart.js/auto'
import { Bar ,Line,line} from 'react-chartjs-2'
import axios from 'axios'


class ChartBar extends React.Component{
  state={
    Data:[],
  }
  componentDidMount(){
    axios.get('http://127.0.0.1:8000/api/task')
    .then(res=>
      this.setState({
        Data:res.data
      }))
  }
  render(){
    return(
      <div>
        <Line 
        data={{
          labels:this.state.Data.map((value)=>value.name),
          datasets:[{
            label:"duree de tache(/h)",
            data:this.state.Data.map((value)=>value.Period),
            indexAxis:'x'
          }]
        }}
         
         />
      </div>
    )
  }


}





export default ChartBar;
