import React from 'react'
export default class Success extends React.Component {
    render() {
        const { location } = this.props
        const params = new URLSearchParams(location.search)
        const password = location.state.password

        return (
            <div>
                <h3>Welcome </h3>
                <h4>{params.get('email')}</h4>
            </div>
        )
    }
}