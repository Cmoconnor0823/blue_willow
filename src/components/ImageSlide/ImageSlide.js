import React, { Component } from "react";
import { Card, CardBody, CardTitle, CardFooter } from "reactstrap";
import "./style.css";

class BannerCard extends Component {

	state = {

	};


	render() {
		return (
			<Card id="imgCard">
				<CardTitle>
					<h2 className="imgHead"> This is a placeholder for the image slideshow </h2>
				</CardTitle>
				<CardBody>
					<div className="imgSlide"></div>
					
				</CardBody>
				<CardFooter>
					<div className="imgFooter">Image tag info possibly included here.</div>
				</CardFooter>
			</Card>
		);
	}
}

export default BannerCard;