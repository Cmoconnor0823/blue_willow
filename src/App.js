//import logo from './logo.svg';
import React, {Component} from "react";
import {
	BrowserRouter as Router,Route,
	// Link,
	//Redirect,
  } from "react-router-dom";
import Home from "./pages/Home";
import About from "./pages/About";
import Bakery from "./pages/Bakery";
import Reservations from "./pages/Reservations";
import NavBar from "./components/Navbar";
import Footer from "./components/Footer";
import Wrapper from "./components/Wrapper";

class App extends Component {
  render (){
    return (
      <Router>
			<NavBar/>
			<Wrapper>
					<Route exact path="/" component={Home} />
					<Route exact path="/home" component={Home}/>
					<Route exact path="/about" component={About} />
					<Route exact path="/bakery" component={Bakery} />
					<Route exact path="/reservations" component={Reservations} />

				{/* <Route exact path="/login" component={Login} /> */}
					{/* <Route exact path="/about" component={About} /> */}
			</Wrapper>
			<Footer />
		</Router>
	);
}
}

export default App;
