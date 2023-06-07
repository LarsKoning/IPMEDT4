import './App.css';
import React from 'react';
import  Card  from './Card';
import Rating from './Rating';
import './Card.css'
import './Rating.css'


function App() {



  return (
    <div>
      {/* <button onClick={shoot}>aaa</button> */}
      <Card text="Inkomsten" amount="$150,00"/>
      <section className='ratings'>
      <Rating header={"Gemiddelde rating"} underText={"5 van de 5"}/>
      <Rating header={"Laatste rating"} underText={"5 van de 5"}/>
      </section>
    </div>
  );
}

export default App;
