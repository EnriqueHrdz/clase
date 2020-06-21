import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class CreateProduct extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name:'',
            description:'',
            store_id:0,
            data: data,
            stores:[
                {id:1, name:'Doña mary'},
                {id:2, name:'Tienda de la esquina'},
                {id:3, name:'XXXXX'},
            ]
        };

        this.handleInputChange = this.handleInputChange.bind(this);
        this.saveButton = this.saveButton.bind(this);

        console.log("Constructor ", this.state);
    }

    handleInputChange(event){
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value ? target.type === 'number' ? parseInt( target.value ) : target.value : target.value;
        const name = target.name;

        this.setState({
            [name]: value
        });
    }

    saveButton(){
        const { name, description, store_id } = this.state;

        const payload = {
            name: name,
            description: description,
            store_id: store_id,
            amount: 0
        }

        axios.post(`http://localhost:8888/clase/public/api/save/product`, payload ).then(res => {
            alert(res.success);
        });

    }

    render() {
        return (
            <form className="ui form">
                <div className="field">
                    <label className="label">Nombre</label>
                    <div className="control">
                        <input name="name" value={this.state.name} className="input" type="text" placeholder="Jackie Chan" onChange={this.handleInputChange} />
                    </div>
                </div>

                <div className="field">
                    <label className="label">Descripción</label>
                    <div className="control">
                        <input className="input" name="description" value={this.state.description} type="text" placeholder="Ponymaster@utrivieramaya.edu.mx"  onChange={this.handleInputChange} />
                    </div>
                </div>

                <div className="control">
                    <div className="select">
                        <select onChange={this.handleInputChange}>
                            <option value={0}>Tienda</option>
                            {
                                this.state.stores.map((value, index) =>{
                                    return <option key={value.name} data-elementid={value.id} value={value.id}>{value.name}</option>
                                })
                            }
                        </select>
                    </div>
                </div>

                <div className="control">
                    <br></br>
                    <button className="button" type="button" onClick={this.saveButton}>Guardar</button>
                </div>
            </form>

        );
    }
}

if (document.getElementById('createProduct')) {
    ReactDOM.render(<CreateProduct />, document.getElementById('createProduct'));
}
