using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace Formulario
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }
        private void btn_Listo_Clicked(object sender, EventArgs e)
        {
            if (secundaria.IsChecked && universidad.IsChecked || (secundaria.IsChecked && tecnico.IsChecked) || (universidad.IsChecked && tecnico.IsChecked))
            {
                DisplayAlert("Error!!!", "Solo puede seleccionar una opcion", "Entendido");
            }
            else
            {
                if (secundaria.IsChecked)
                {
                    Navigation.PushAsync(new curriculum(nombre.Text, apellido.Text, "Secundaria", xp.Text, area.Text, tel.Text, correo.Text));
                }else if (tecnico.IsChecked)
                {
                    Navigation.PushAsync(new curriculum(nombre.Text, apellido.Text, "Tecnico", xp.Text, area.Text, tel.Text, correo.Text));
                }
                else
                {
                    Navigation.PushAsync(new curriculum(nombre.Text, apellido.Text, "Universidad", xp.Text, area.Text, tel.Text, correo.Text));
                }
            }
        }
        private void en_nombre_completed(object sender, EventArgs e)
        {
            progreso(nombre, 0.16);
        }
        private void en_apellido_completed(object sender, EventArgs e)
        {
            progreso(apellido, 0.32);
        }
        private void en_xp_completed(object sender, EventArgs e)
        {
            progreso(apellido, 0.48);
        }
        private void en_correo_completed(object sender, EventArgs e)
        {
            progreso(apellido, 1);
        }
        private void en_area_completed(object sender, EventArgs e)
        {
            progreso(apellido, 0.64);
        }
        private void en_tel_completed(object sender, EventArgs e)
        {
            progreso(apellido, 0.8);
        }

        private void progreso(Entry a, double b)
        {
            if (a.Text != "")
            {
                progress.ProgressTo(b, 255, Easing.Linear);
            }
            else
            {
                progress.ProgressTo(0, 255, Easing.Linear);
            }
        }
    }
}
