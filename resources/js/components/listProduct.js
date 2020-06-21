import React, {Component, Fragment} from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class ListProduct extends Component {
    constructor(props) {
        super(props);
        this.state = {
            dataList: dataList,
            selectedItem:{ id: 0, name:'', description:'', store_id: 0 },
            openModal: false,
            stores:[
                {id:1, name:'Doña mary'},
                {id:2, name:'Tienda de la esquina'},
            ]
        }
        this.editItem = this.editItem.bind(this);
        this.colseModal = this.colseModal.bind(this);
        this.deleteItem = this.deleteItem.bind(this);
        this.openEditItemModal = this.openEditItemModal.bind(this);
        this.handleInputChange = this.handleInputChange.bind(this);

        console.log( "The state ", this.state );
    }

    openEditItemModal(item){
        console.log("Editing... ", item);
        this.setState({ selectedItem: item });
        this.setState({ openModal: true });
    }

    deleteItem(item){
        console.log("deleting item... ", item);
        axios.delete(`http://localhost:80/clase/public/api/delete/product`, item ).then(res => {
            this.setState({ openModal: false });
            alert("Se ha eliminado correctamente");
        });
    }

    editItem(){
        axios.patch(`http://localhost:80/clase/public/api/edit/product`, this.state.selectedItem ).then(res => {
            this.setState({ openModal: false });
            alert("Se ha guardado correctamente");
            if(res){
                const updateVal = [ ...this.state.dataList ]
                const index = updateVal.findIndex( ({id}) => id === this.state.selectedItem.id )
                if(index != -1){
                    updateVal[index] = this.state.selectedItem
                    this.setState({
                        dataList: updateVal
                    });
                }
            }
        });
    }

    colseModal(){
        this.setState({
            openModal: false
        })
    }

    handleInputChange(event){
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value ? target.type === 'number' ? parseInt( target.value ) : target.value : target.value;
        const name = target.name;
        const newVal = {...this.state.selectedItem}
        newVal[name] = value;
        this.setState({ selectedItem : newVal })
    }

        render() {
            const { openModal, selectedItem } = this.state;

            const listItems = this.state.dataList.map((item) => {
                return(
                    <tr key={item.id}>
                        {/* <td>{item.id}</td> */}
                        <td>{item.name}</td>
                        <td>{item.description}</td>
                        {/* <td>{item.amount}</td> */}
                        <td>{item.amount}</td>
                        <td>
                            <button onClick={ () => this.openEditItemModal(item) } className="button is-info"><i class="edit outline icon"></i></button></td>
                        <td>
                            <button onClick={ () => this.deleteItem(item) } className="button is-danger"><i class="trash alternate outline icon"></i></button></td>
                    </tr>
                )
            });

            return (
                <div class="ui container">
                    <br></br> 
                <Fragment>
                    <table className="ui celled table">
                        <thead>
                        <tr>
                            {/* <th><abbr title="Position">Id</abbr></th> */}
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Costo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                                {listItems}
                        </tbody>
                    </table>

                    <div className={ openModal? 'modal is-active' : 'modal' }>
                        <div className="modal-background"></div>
                        <div className="modal-card">
                            <header className="modal-card-head">
                                <p className="modal-card-title">Editar</p>
                                <button className="delete" onClick={ () => this.colseModal()} aria-label="close"></button>
                            </header>
                            <section className="modal-card-body">
                            {/*  Content  */}
                                <form>
                                    <div className="field">
                                        <label className="label">Nombre</label>
                                        <div className="control">
                                            <input name="name" value={selectedItem.name} className="input" type="text" placeholder="e.g Alex Smith" onChange={this.handleInputChange} />
                                        </div>
                                    </div>
                                    <div className="field">
                                        <label className="label">Descripción</label>
                                        <div className="control">
                                            <input className="input" name="description" value={selectedItem.description} type="text" placeholder="e.g. chaparro99@gmail.com"  onChange={this.handleInputChange} />
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
                                </form>
                            </section>
                            <footer className="modal-card-foot">
                                {/* <button className="button is-primary" onClick={ () => this.editItem() }><i class="save outline icon"></i> sGuardar</button>
                                <button className="button is-danger" onClick={ () => this.colseModal() }>Cancelar</button> */}
                                <div class="ui buttons">

<button className="ui button" onClick={ () => this.colseModal() }>Cancelar</button>
<div class="or"></div>


<button className="ui positive button" onClick={ () => this.editItem() }>Guardar</button>
</div>
                            </footer>
                        </div>
                    </div>
                </Fragment>
                </div>
            )
        }
}
if (document.getElementById('listProduct')) {
    ReactDOM.render(<ListProduct />, document.getElementById('listProduct'));
}
