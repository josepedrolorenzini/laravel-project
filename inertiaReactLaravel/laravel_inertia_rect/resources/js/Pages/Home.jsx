import React from 'react'
import Layout from '../Layouts/Layouts'

function Home({ name , positive }) {
  return (
    <>
    <div>
        Welcome Home {name}
        {positive ? ' <p>back to chile</p> ' : ' stay in australia'}
    </div>
    </>
    
  )
}

Home.layout = page => <Layout children={page} title="Welcome" />

export default Home