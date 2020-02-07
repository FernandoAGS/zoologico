package AnimalesZologicos;

public class Animal {
	private String Nombre;
	private String Pais;
	private String Fecha_ingreso;
	private String tipo;
	
	//Constructor
	
	public Animal() {
		this.Nombre= "";
		this.Pais	= "";
		this.Fecha_ingreso = "";
	}
	
	public Animal(String _tipo,String _Nombre,String _Pais, String _Fecha_ingreso) {
		this.Nombre = _Nombre;
		this.Pais = _Pais;
		this.Fecha_ingreso = _Fecha_ingreso;
		this.tipo = _tipo;
		
	}
	
	// SETTERS GETTERS
	public String getNombre() {
		return Nombre;
	}
	public void setNombre(String nombre) {
		Nombre = nombre;
	}
	public String getPais() {
		return Pais;
	}
	public void setPais(String pais) {
		Pais = pais;
	}
	public String getTipo() {
		return tipo;
	}
	public String getFecha_ingreso() {
		return Fecha_ingreso;
	}
	public void setFecha_ingreso(String fecha_ingreso) {
		Fecha_ingreso = fecha_ingreso;
	}

		//ToString
	@Override
	public String toString() {
		return "Animal [Nombre=" + Nombre + ", Pais=" + Pais + ", Fecha_ingreso=" + Fecha_ingreso + "]";
	}

	public void mostrar() {
		System.out.println(" El animal es el siguiente "+ toString() );
		
	}

	
	
}