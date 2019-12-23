import React from 'react';
import './App.css';
import { calculateTime, styleDisplayTime } from './funcTime';

class App extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      seconds: 0,
      time: 0,
      isRunning : false,
      isDisabledButton : true,
      displayTime: '00:00:00:00',
      isPause: false,
    };
  }

  handleClickReset = () => {
    this.setState({
      time:0,
      seconds: 0,
      isRunning : false,
      isDisabledButton: true,
      displayTime: '00:00:00:00',
    });
  }

  handleChangeTime = (event) =>{
    const value = parseInt(event.target.value ,10);
    if (value){
      this.setState({
        seconds: value,
        time: value*1000,
        isDisabledButton: false,
        displayTime: calculateTime(value*1000),
      });
    } else {
      this.setState({
        seconds : 0,
        time: 0,
        isDisabledButton: true,
        displayTime: calculateTime(0),
      });
    }
  }

  handleClickStart=()=>{
    const { isPause } = this.state;
    if (isPause){
      this.setState({ isPause: false });
    }
    if ( this.state.time ){
      var timer = setInterval( () => {
        if (this.state.isPause){
            clearInterval(timer);
        } else if(!this.state.time) {
            clearInterval(timer);
            this.handleClickReset();
        } else {
          this.setState({
            isRunning: true,
            time: this.state.time-10,
            displayTime: calculateTime(this.state.time),
          })
        }
      } ,10)
    }
  }

  handleClickPause = () => {
    this.setState({
      isRunning: !this.state.isRunning,
      isPause: !this.state.isPause,
      seconds: Math.round(this.state.time/1000),
    })
  }

  render() {
    const { seconds, isRunning, isDisabledButton, displayTime, time } = this.state
    return (
      <div>
        <div className="circle">
          {
            !isRunning &&
            <div>
              <div className="text-info" >{displayTime}</div>
              <input className="display-time"
                value={seconds}
                onChange={this.handleChangeTime}
                maxLength={6}
              />
            </div>
          }
          {
            isRunning &&
            <p className="display-time"
              style={{ color: styleDisplayTime(time) ? 'red' : 'null' }}
            >
              {displayTime}
            </p>
          }

          <div className="option-button">
            {
              !isRunning &&
              <button
                ref="start"
                disabled={isDisabledButton}
                className="button-left"
                onClick={this.handleClickStart}
              >Start</button>
            }
            {
              isRunning &&
              <button
                className="button-left"
                onClick={this.handleClickPause}
              >Pause</button>
            }
            <button
                ref="reset"
                disabled={isDisabledButton}
                className="button-right"
                onClick={this.handleClickReset}
              >Reset</button>
          </div>

        </div>
      </div>
    );
  }
}

export default App;