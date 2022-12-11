import React from 'react'
import { Chart as ChartJS , BarElement  } from 'chart.js'
import { Bar } from 'react-chartjs-2'
ChartJS.register(
    BarElement
)

const chart = () => {
  
   var data= {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      }
      var  options= {
        maintainAspectRatio:false,
        scales: {
          y: {
            beginAtZero: true
          }
        },
        legend:{
            labels:{
                fontSize:26
            }
        }
      }
return (
     
    <div>
        
      <Bar
      data={data}
      height={400}
      options={options}
      
      
      />
    </div>
  )
}

export default chart
