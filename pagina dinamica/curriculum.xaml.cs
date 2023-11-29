using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace Formulario
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class curriculum : ContentPage
    {
        public curriculum(string nombre, string apellido, string estudios, string xpe, string area, string numero, string correo)
        {
            InitializeComponent();

            n.Text += nombre;
            a.Text += apellido;
            es.Text += estudios;
            ar.Text += area;
            xp.Text = "Tengo " + xpe + " años de experiencia laboral";
            tel.Text += numero;
            co.Text += correo;
        }
    }
}