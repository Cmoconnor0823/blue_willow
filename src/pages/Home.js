import React, { Component } from "react";
import { Col, Row, CardColumns } from "reactstrap";
import BannerCard from "../components/BannerCard";
import Wrapper from "../components/Wrapper/";
//import "./style.css";


class Home extends Component {
    render() {
        return (
            <Wrapper>
                <Row>
                    <Col>
                        <BannerCard></BannerCard>
                    </Col>
                </Row>
                <Row className="m-3">
                    <Col>
                        <CardColumns>
                            {/*<MessageCard></MessageCard>*/}
                            {/* This is a template to make a new card
                                     <Card>
                                     <CardBody>
                                        <CardTitle>
                                            <h4>This is an example of a card that is not a called in component</h4>
                                        </CardTitle>
                                        </CardBody>
                                    </Card> */}
                        </CardColumns>
                    </Col>
                </Row>
            </Wrapper>
        );
    }
}

export default Home;