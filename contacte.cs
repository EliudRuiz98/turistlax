using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Clientes
{
    #region Contacte
    public class Contacte
    {
        #region Member Variables
        protected string _Nombre;
        protected string _Telefono;
        protected string _Correo;
        protected unknown _Fecha;
        protected string _Origen;
        protected string _Destino;
        protected string _Pasajeros;
        protected string _Detalles;
        protected string _administrador;
        protected string _contrasena;
        #endregion
        #region Constructors
        public Contacte() { }
        public Contacte(string Nombre, string Telefono, string Correo, unknown Fecha, string Origen, string Destino, string Pasajeros, string Detalles, string administrador, string contrasena)
        {
            this._Nombre=Nombre;
            this._Telefono=Telefono;
            this._Correo=Correo;
            this._Fecha=Fecha;
            this._Origen=Origen;
            this._Destino=Destino;
            this._Pasajeros=Pasajeros;
            this._Detalles=Detalles;
            this._administrador=administrador;
            this._contrasena=contrasena;
        }
        #endregion
        #region Public Properties
        public virtual string Nombre
        {
            get {return _Nombre;}
            set {_Nombre=value;}
        }
        public virtual string Telefono
        {
            get {return _Telefono;}
            set {_Telefono=value;}
        }
        public virtual string Correo
        {
            get {return _Correo;}
            set {_Correo=value;}
        }
        public virtual unknown Fecha
        {
            get {return _Fecha;}
            set {_Fecha=value;}
        }
        public virtual string Origen
        {
            get {return _Origen;}
            set {_Origen=value;}
        }
        public virtual string Destino
        {
            get {return _Destino;}
            set {_Destino=value;}
        }
        public virtual string Pasajeros
        {
            get {return _Pasajeros;}
            set {_Pasajeros=value;}
        }
        public virtual string Detalles
        {
            get {return _Detalles;}
            set {_Detalles=value;}
        }
        public virtual string Administrador
        {
            get {return _administrador;}
            set {_administrador=value;}
        }
        public virtual string Contrasena
        {
            get {return _contrasena;}
            set {_contrasena=value;}
        }
        #endregion
    }
    #endregion
}