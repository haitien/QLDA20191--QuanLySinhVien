import React from 'react'

export default class Login extends React.Component {
    constructor(props){
        super(props);
        this.state={
            email:'',
            password:''
        }
    }
    fillEmail=(event)=>{
        this.setState({
            email: event.target.value
        })
    }
    fillPass=(event)=>{
        this.setState({
            password: event.target.value
        })
      }
    login=()=>{
        const {history}= this.props
        const {email, password}=this.state
        history.push({
            pathname: "/success",
            search: `?email=${email}`,
            state:{
                password:password
            }
        })
    }

    render() {
      return (
        <div>
            <h2> Login </h2>
            <div className="item">
                <li>
                    <input type="text" placeholder="  Email..." onChange={this.fillEmail}></input>
                    <br></br>
                </li>
                <li>
                    <input type="password" placeholder="  password..." onChange={this.fillPass}></input>
                </li>
                <li>
                    <button type="submit" onClick={this.login}>Sign In</button>
                </li>
            </div>
        </div>
      )
    }
}
