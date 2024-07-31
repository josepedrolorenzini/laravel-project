import React from 'react';
import ReactDOM from 'react-dom';


let Hello = () => {
  
    return (
        <div>
            <h1>Hello React!</h1>
            <p>This is a simple React component.</p>
        </div>
    );
};

export default Hello;

if (document.getElementById('example')) {
    ReactDOM.render(<Hello />, document.getElementById('example'));
}
