package AnimalesZologicos;

public class AnimalVolador extends Animal {
	
	private String color_pluma;
	private int tamaño;
	private String migrante;
	
	//CONSTRUCTOR
	public AnimalVolador() {
		// TODO Auto-generated constructor stub
	}
	public AnimalVolador(String _tipo,String _Nombre, String _Pais, String _Fecha_ingreso,String _color_pluma , int _tamaño, String _migrante) {
		super(_tipo,_Nombre, _Pais, _Fecha_ingreso);
		this.color_pluma = _color_pluma;
		this.tamaño = _tamaño;
		this.migrante = _migrante;
		// TODO Auto-generated constructor stub
	}
	//SETTERS GETTERS
	public String getColor_pluma() {
		return color_pluma;
	}
	public void setColor_pluma(String color_pluma) {
		this.color_pluma = color_pluma;
	}
	public int getTamaño() {
		return tamaño;
	}
	public void setTamaño(int tamaño) {
		this.tamaño = tamaño;
	}
	public String getMigrante() {
		return migrante;
	}
	public void setMigrante(String migrante) {
		this.migrante = migrante;
	}
	//TOstring
	@Override
	public String toString() {
		return "AnimalVolador [color_pluma=" + color_pluma + ", tamaño=" + tamaño + ", migrante=" + migrante
				+ ", getNombre()=" + getNombre() + ", getPais()=" + getPais() + ", getFecha_ingreso()="
				+ getFecha_ingreso() +  "]";
	}
	
	

}