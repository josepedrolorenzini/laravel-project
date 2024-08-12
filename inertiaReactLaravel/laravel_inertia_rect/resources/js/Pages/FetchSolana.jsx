import { useEffect, useState } from "react";
import Layout from '../Layouts/Layouts'



function FetchSolana(props=null) {
 let [solanaData, setsolanaData] = useState([]);


let solana  =  () => {
const url = "https://eth-mainnet.g.alchemy.com/v2/ZW5exyHrX4ax8U_MOSZ869kOhu9ZcBEx";
const headers = {
  Accept: "application/json",
  "Content-Type": "application/json",
};

const body = JSON.stringify({
  id: 1,
  jsonrpc: "2.0",
  method: "eth_getBlockByNumber",
  params: ["finalized", false],
});

fetch( url, {
  method: "POST",
  headers: headers,
  body: body,
})
  .then((response) => response.json())
  .then((data) => {
    setsolanaData( data );
    console.log(data)})
  .catch((error) => console.error("Error:", error));
}


useEffect(() => {
  

  return () => {
  //  solana()
  }
}, [])

    
  return (
    <div>
        hello


    </div>
  )
}

FetchSolana.propTypes = {}

FetchSolana.layout = page => <Layout children={page} title="Welcome" />
export default FetchSolana
