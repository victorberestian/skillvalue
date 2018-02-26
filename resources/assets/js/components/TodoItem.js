import React, { PureComponent } from 'react';

export default class TodoItem extends PureComponent {

  constructor(props) {
    super(props);

    this.handleChange = this.handleChange.bind(this);
  }

  handleChange(e) {
    if (this.props.onChange) {
      this.props.onChange(this.props);
    }
  }

  render() {
    return (
      <label>
        <input type="checkbox" checked={this.props.completed} onChange={this.handleChange} /> {this.props.label}
      </label>
    );
  }
}