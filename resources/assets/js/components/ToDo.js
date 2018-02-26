import React, { Component } from 'react';
import TodoItem from './TodoItem';
import { Link } from 'react-router-dom';

export default class TodoList extends Component {
    constructor(props) {
        super(props);

        this.state = {
            items: [
                {
                    id: 1,
                    label: "Learn react",
                    completed: true,
                },
                {
                    id: 2,
                    label: "Learn Redux",
                    completed: false,
                }
            ]
        }

        // срач
        this.handleCompletion = this.handleCompletion.bind(this);
    }

    handleCompletion(targetItem) {
        const items = this.state.items.map(item => {
            if (item.id === targetItem.id) {
                item.completed = !item.completed;
            }
            return item;
        });

        this.setState({
            items
        });
    }

    render() {
        return (
            <ul>
                {this.state.items.map((item, index) => {
                    return (
                        <li key={item.id}>
                            <TodoItem {...item} onChange={this.handleCompletion} />
                        </li>
                    )
                })}
            </ul>
        );
    }
}