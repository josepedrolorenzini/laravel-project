import React, { useState, useEffect } from 'react';
import Layout from '../Layouts/Layouts'
import { faker } from '@faker-js/faker';
import { useFaker } from 'react-fakers'


function Test() {
    

    let users = [

        { 
         name: 'JOSE PEDRO',
         email: 'jose.pedro@gmail.com',
         age: 30,
         fakers: faker.hacker.abbreviation()
        },
        { 
         name: 'John Doe',
         email: 'john.doe@example.com',
         age: 30,
         fakers: faker.hacker.abbreviation()
     }
     ] ;

    let nummero = [1,2,3,4,5,6,7,8,9,10,11,12];


    function shoot(){
        console.log('onClick')
    }
    let handleClick = () => {
        console.log('handleClick')
        try {
            let newUsers = [...users];
            newUsers.push({
                name: faker.person.findName(),
                email: faker.internet.email(),
                age: faker.datatype.number({ min: 20, max: 60 }),
                fakers: faker.hacker.abbreviation()
            });
            setUsuario(newUsers)
            console.log(usuarios);
           
        } catch (error) {
           console.warn(error) ;
        }
      }


      let [numero , setNumero ] = useState(nummero) ;
    let [usuario , setUsuario ] = useState(users) ;
    const { success, error, loading } = useFaker()

    //useEffect 
   useEffect(() => {

       console.log('useEffect')
       console.log(usuario) ; 
       handleClick()
     

   },[usuario]) // Only re-run effect if 'usuario' changes
   
   return (
    <>
    <div>
        <h1>Home PAGE</h1>
       <> {numero.map( (e,i)   => 
        <li key={i}>
            {e}
            </li>)
        }</>
    </div>
    <p>Usuarios</p>
    <button onClick={handleClick}> add users </button>


    {!loading && <h4>Loading....</h4>}
      <ul>
        {loading &&
        
          success.map((val, id) => (
            console.log(val) ,
            <li key={val.uuid}>
              {val.firstname} {val.lastname} - {val.email}
            </li>

          ))
          }
      </ul>
    </>
  )
}
Test.layout = page => <Layout children={page} title="Welcome" />
export default Test