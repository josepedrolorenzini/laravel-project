import React, { useEffect, useState } from 'react';
import Layout from '../Layouts/Layouts'

function Apicrypto() {
     const [coin , setCoin] = useState([]) ;

 

     let fetchData = async ()=>{

         let response  = await fetch('https://api.coingecko.com/api/v3/coins/bitcoin')
         if(response.ok) {

             let data      =  await response.json() ;
             //console.log(data);
             setCoin(coin => [...coin , data]);
             console.log(coin);
             return data ;
         }
       
         //console.log(data);
     }
     // eslint-disable-next-line react-hooks/exhaustive-deps

    useEffect(() => {

      if(coin){
        console.log(coin);
        fetchData()
        .then(data => {
       //  data  = setCoin(coin => [...coin , data]);
         return data
        })
        .catch(error => console.error('Error:', error));
      
      }
      
       
        


    },[])
   
  

  return (
  
    <>
    <div>Apicrypto</div>
    <button onClick={fetchData}>clik me</button>
    {coin && 
    coin.map( 
        (e) => {
       return <p>{e.id}</p>
    }
    )}
    </>
  )
}

Apicrypto.layout = page => <Layout children={page} title="Welcome" />
export default Apicrypto