import React, { Component } from "react";
import { Card, CardBody, CardTitle, CardFooter } from "reactstrap";
import "./style.css";

class BannerCard extends Component {

	state = {

	};


	render() {
		return (
			<Card id="bannerCard">
				<CardTitle>
					<h2 className="bannerHead"> This is a placeholder for the banner card </h2>
				</CardTitle>
				<CardBody>
					<br></br>
					<h2 className="bannerHead"> Suggest using this banner card to display site updates like specials and current announcements</h2>
					<br></br>
					<h5 className="bannerTitle">This can be used as a smaller head title</h5>
					<h6 className="bannerText">This spot can show fine print details if needed.</h6>
					
				</CardBody>
				<CardFooter>
					<div className="bannerFooter">Questions, Comments, Concerns? Contact site author at cmoconnor0823@gmail.com</div>
				</CardFooter>
			</Card>
		);
	}
}

export default BannerCard;